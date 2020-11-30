<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2017-09-21 08:19:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =128
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =128
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 08:26:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =128
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =128
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 09:52:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =140
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =140
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 09:52:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =140
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =140
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 09:58:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =140
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =140
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 10:01:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 10:27:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =60
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =60
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 10:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 10:30:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 10:31:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =60
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =60
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 10:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =37
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =37
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 10:42:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =60
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =60
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 10:52:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =274
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 10:53:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =254
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =254
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 10:53:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =274
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 10:56:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =274
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 11:00:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 11:08:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =97
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =97
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:18:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:19:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 11:22:57 --> Severity: Notice  --> Undefined index: commentaire /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2269
ERROR - 2017-09-21 11:34:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:34:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:37:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =97
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =97
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 11:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 11:40:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 11:45:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =254
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =254
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 11:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =60
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =60
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 11:52:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 11:53:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 11:54:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 11:58:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 12:04:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 12:04:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '254'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 12:10:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 12:11:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-21 00:00:00" AND date_commande < "2017-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:13:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =169
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =169
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 12:26:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =285
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =285
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 12:29:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =285
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =285
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 12:32:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:39:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 12:51:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 12:51:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 12:52:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 12:52:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 13:24:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =254
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =254
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:27:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:34:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 13:34:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 13:36:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:46:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 13:52:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 13:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 13:59:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:07:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 14:08:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 14:14:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 14:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 14:15:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 14:56:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 14:56:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:08:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:08:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 15:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 15:19:09 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1402
ERROR - 2017-09-21 15:19:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1402
ERROR - 2017-09-21 15:19:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 15:19:12 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:12 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:18 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:18 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:20 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:21 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:56 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:19:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1677
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:20:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:20:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =285
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =285
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:22:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:22:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:22:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:27:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '18'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '20'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '20'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '20'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '26'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '26'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '26'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '29'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '30'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '37'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '37'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '37'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '41'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '44'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '44'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '44'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '60'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '60'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '60'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '93'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '93'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '93'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '98'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '98'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '98'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '102'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '123'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '123'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '123'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '128'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '128'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '128'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '136'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '140'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '140'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '140'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '149'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '165'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '165'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '165'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '166'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '169'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '169'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '169'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '174'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '175'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '175'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '175'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '179'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '187'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '187'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '187'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '204'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '204'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '204'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '225'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '225'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '225'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '230'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '230'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '230'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '231'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '231'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '231'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '232'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '232'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '232'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:27:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 15:27:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '246'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '247'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '254'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '257'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '260'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '262'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '262'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '262'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '264'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '264'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '264'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '265'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '268'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '272'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '272'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '272'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '273'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '273'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '273'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '274'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '274'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '274'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '276'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '276'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '276'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '282'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '286'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '286'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '286'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '287'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '287'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '287'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '290'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '290'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '290'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '291'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '291'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '291'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '18'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '20'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '20'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '20'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '26'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '26'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '26'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '29'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '30'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '37'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '37'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '37'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '41'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '44'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '44'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '44'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '60'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '60'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '60'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '93'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '93'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '93'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '98'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '98'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '98'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '102'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '123'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '123'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '123'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '128'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '128'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '128'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '136'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '140'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '140'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '140'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '149'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '165'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '165'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '165'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '166'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '169'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '169'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '169'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '174'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '175'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '175'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '175'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '179'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '187'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '187'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '187'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '204'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '204'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '204'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '225'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '225'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '225'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '230'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '230'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '230'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '231'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '231'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '231'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '232'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '232'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '232'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 15:27:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '246'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '247'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '254'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '257'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '260'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '262'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '262'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '262'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '264'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '264'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '264'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '265'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '268'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '272'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '272'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '272'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '273'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '273'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '273'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '274'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '274'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '274'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '276'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '276'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '276'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '282'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '286'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '286'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '286'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '287'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '287'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '287'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '290'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '290'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '290'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '291'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '291'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '291'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:27:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2017-09-21 15:27:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2017'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2017' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2017'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2017'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2017-09-21 15:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 15:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 15:57:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =264
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =264
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 16:08:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 16:08:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 16:08:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =30
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =30
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:09:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:10:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 16:11:25 --> Severity: Notice  --> Undefined variable: maxUser /home/www/optieyescommande.com/htdocs/application/views/admin/ancienne_commande_lentille.php 28
ERROR - 2017-09-21 16:19:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 16:23:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 16:29:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =30
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =30
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 16:54:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =246
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =246
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 16:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =246
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =246
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 17:36:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =246
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =246
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:37:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 17:40:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 17:49:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 17:53:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 17:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 18:03:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:03:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 18:07:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 18:23:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 18:23:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 18:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 18:27:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =29
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =29
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 18:28:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 18:30:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 18:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 18:31:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 18:31:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 18:33:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 18:33:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 18:34:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 18:49:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =169
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =169
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 18:49:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =169
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =169
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 59
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 18:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2017-09-21 18:50:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 18:57:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =140
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =140
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 18:59:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =140
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =140
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 19:00:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =140
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =140
                                   ORDER BY date_commande DESC
ERROR - 2017-09-21 19:19:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 19:20:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2017-09-21 19:21:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 19:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-09 00:00:00" AND date_commande < "2017-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-17 00:00:00" AND date_commande < "2017-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-18 00:00:00" AND date_commande < "2017-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-19 00:00:00" AND date_commande < "2017-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-20 00:00:00" AND date_commande < "2017-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-22 00:00:00" AND date_commande < "2017-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-23 00:00:00" AND date_commande < "2017-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-24 00:00:00" AND date_commande < "2017-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-25 00:00:00" AND date_commande < "2017-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-26 00:00:00" AND date_commande < "2017-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-27 00:00:00" AND date_commande < "2017-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-28 00:00:00" AND date_commande < "2017-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-29 00:00:00" AND date_commande < "2017-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2017-09-21 21:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2017-09-30 00:00:00" AND date_commande < "2017-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
