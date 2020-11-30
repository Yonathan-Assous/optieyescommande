<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-04-20 09:18:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =107
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
                                   WHERE c.id_commande= AND c.id_users =107
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 09:34:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 09:37:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 09:40:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 09:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 10:04:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 10:29:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =136
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
                                   WHERE c.id_commande= AND c.id_users =136
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 10:39:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 10:39:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 10:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 10:40:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 10:50:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =343
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
                                   WHERE c.id_commande= AND c.id_users =343
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 11:00:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 11:01:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 11:02:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 11:05:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =285
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
                                   WHERE c.id_commande= AND c.id_users =285
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 11:21:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =102
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
                                   WHERE c.id_commande= AND c.id_users =102
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 11:37:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =384
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
                                   WHERE c.id_commande= AND c.id_users =384
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 11:37:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =384
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
                                   WHERE c.id_commande= AND c.id_users =384
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 11:44:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 11:45:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 11:59:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 12:03:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:03:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:13:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =310
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
ERROR - 2019-04-20 12:18:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:26:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:27:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =97
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
                                   WHERE c.id_commande= AND c.id_users =97
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 12:29:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 12:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =162
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
                                   WHERE c.id_commande= AND c.id_users =162
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:34:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 12:36:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
ERROR - 2019-04-20 12:38:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
ERROR - 2019-04-20 12:48:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
ERROR - 2019-04-20 12:49:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
ERROR - 2019-04-20 12:49:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
ERROR - 2019-04-20 12:49:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
ERROR - 2019-04-20 12:50:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 12:52:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 12:57:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 13:02:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 13:02:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 13:03:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 13:20:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 13:20:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =253
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
                                   WHERE c.id_commande= AND c.id_users =253
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 13:24:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 13:35:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 13:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 13:37:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =343
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
                                   WHERE c.id_commande= AND c.id_users =343
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 13:37:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =343
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
                                   WHERE c.id_commande= AND c.id_users =343
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 13:38:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 13:38:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =343
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
                                   WHERE c.id_commande= AND c.id_users =343
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 13:39:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 14:04:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =378
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
                                   WHERE c.id_commande= AND c.id_users =378
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 14:05:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 14:05:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '04-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '04-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 14:05:14 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 14:17:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 14:17:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '02-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '02-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 14:17:56 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 14:18:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 14:18:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 14:18:10 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 14:18:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 14:18:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '04-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '04-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 14:18:34 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 14:18:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 14:18:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2018'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2018'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2018'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 14:18:54 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 14:19:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 14:19:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '01-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '01-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 14:19:27 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 14:20:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 14:20:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '02-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '02-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 14:20:02 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 14:20:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 14:20:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 14:20:28 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:21:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:35:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 14:36:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 14:36:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 14:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =97
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
                                   WHERE c.id_commande= AND c.id_users =97
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 14:48:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
ERROR - 2019-04-20 14:53:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 14:53:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '04-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '04-2019'
        AND id_etat_commande = 6
        AND id_users = '296'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 14:53:44 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 14:56:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:56:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 14:56:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 15:00:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =137
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
                                   WHERE c.id_commande= AND c.id_users =137
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:13:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =312
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
                                   WHERE c.id_commande= AND c.id_users =312
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =312
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
                                   WHERE c.id_commande= AND c.id_users =312
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:15:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =312
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
                                   WHERE c.id_commande= AND c.id_users =312
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:16:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =312
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
                                   WHERE c.id_commande= AND c.id_users =312
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =284
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
                                   WHERE c.id_commande= AND c.id_users =284
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:40:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =97
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
                                   WHERE c.id_commande= AND c.id_users =97
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:43:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =137
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
                                   WHERE c.id_commande= AND c.id_users =137
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:47:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:52:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:52:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:54:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:54:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:58:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 15:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:00:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:00:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:01:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:02:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:12:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =137
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
                                   WHERE c.id_commande= AND c.id_users =137
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:12:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:12:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:12:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:15:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =285
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
                                   WHERE c.id_commande= AND c.id_users =285
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:16:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =285
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
                                   WHERE c.id_commande= AND c.id_users =285
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:23:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =337
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
                                   WHERE c.id_commande= AND c.id_users =337
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:23:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =337
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
                                   WHERE c.id_commande= AND c.id_users =337
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:31:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =337
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
                                   WHERE c.id_commande= AND c.id_users =337
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:32:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:34:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =337
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
                                   WHERE c.id_commande= AND c.id_users =337
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:37:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =337
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
                                   WHERE c.id_commande= AND c.id_users =337
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:41:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:42:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:43:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:44:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:45:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:49:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
ERROR - 2019-04-20 16:50:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
                                   WHERE c.id_commande= AND c.id_users =283
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 16:51:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =309
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
ERROR - 2019-04-20 16:52:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 16:54:36 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 16:54:37 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 16:54:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 16:54:37 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 16:54:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 16:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:02:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =383
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
                                   WHERE c.id_commande= AND c.id_users =383
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:03:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
ERROR - 2019-04-20 17:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =60
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
                                   WHERE c.id_commande= AND c.id_users =60
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:13:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
                                   WHERE c.id_commande= AND c.id_users =245
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:16:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =342
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
                                   WHERE c.id_commande= AND c.id_users =342
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:16:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =336
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
                                   WHERE c.id_commande= AND c.id_users =336
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:16:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =336
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
                                   WHERE c.id_commande= AND c.id_users =336
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:16:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =342
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
                                   WHERE c.id_commande= AND c.id_users =342
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:18:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =282
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
                                   WHERE c.id_commande= AND c.id_users =282
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:20:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
ERROR - 2019-04-20 17:20:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:21:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =381
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
                                   WHERE c.id_commande= AND c.id_users =381
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:21:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =381
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
                                   WHERE c.id_commande= AND c.id_users =381
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:21:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =381
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
                                   WHERE c.id_commande= AND c.id_users =381
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:22:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =381
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
                                   WHERE c.id_commande= AND c.id_users =381
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:22:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:24:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =310
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
ERROR - 2019-04-20 17:27:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:33:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =282
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
                                   WHERE c.id_commande= AND c.id_users =282
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:35:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
ERROR - 2019-04-20 17:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =381
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
                                   WHERE c.id_commande= AND c.id_users =381
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:43:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =162
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
                                   WHERE c.id_commande= AND c.id_users =162
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:45:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:45:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:48:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =32
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
                                   WHERE c.id_commande= AND c.id_users =32
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:49:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:49:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
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
ERROR - 2019-04-20 17:49:44 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-04-20 17:49:44 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-04-20 17:49:44 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-04-20 17:49:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 17:50:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
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
ERROR - 2019-04-20 17:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =284
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
                                   WHERE c.id_commande= AND c.id_users =284
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:58:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =162
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
                                   WHERE c.id_commande= AND c.id_users =162
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 17:59:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 17:59:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =97
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
                                   WHERE c.id_commande= AND c.id_users =97
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:08:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =137
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
                                   WHERE c.id_commande= AND c.id_users =137
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:09:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =342
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
                                   WHERE c.id_commande= AND c.id_users =342
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:10:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =342
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
                                   WHERE c.id_commande= AND c.id_users =342
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:10:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =342
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
                                   WHERE c.id_commande= AND c.id_users =342
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:12:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =342
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
                                   WHERE c.id_commande= AND c.id_users =342
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:18:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 18:19:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-04-20 18:22:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =374
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
                                   WHERE c.id_commande= AND c.id_users =374
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:23:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =140
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
                                   WHERE c.id_commande= AND c.id_users =140
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:25:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =162
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
                                   WHERE c.id_commande= AND c.id_users =162
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:33:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =162
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
                                   WHERE c.id_commande= AND c.id_users =162
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:34:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:37:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =378
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
                                   WHERE c.id_commande= AND c.id_users =378
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:40:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =337
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
                                   WHERE c.id_commande= AND c.id_users =337
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 18:40:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 18:41:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =136
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
                                   WHERE c.id_commande= AND c.id_users =136
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:48:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =337
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
                                   WHERE c.id_commande= AND c.id_users =337
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:49:49 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1454
ERROR - 2019-04-20 18:49:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1454
ERROR - 2019-04-20 18:49:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
ERROR - 2019-04-20 18:49:51 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-04-20 18:49:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-04-20 18:49:56 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-04-20 18:49:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-04-20 18:49:56 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-04-20 18:49:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 18:50:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 18:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =337
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
                                   WHERE c.id_commande= AND c.id_users =337
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:50:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =337
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
                                   WHERE c.id_commande= AND c.id_users =337
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 18:51:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-04-20 18:51:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '04-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '04-2019'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-04-20 18:51:51 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-04-20 18:52:38 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-04-20 18:52:38 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-04-20 19:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 19:15:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
ERROR - 2019-04-20 19:28:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =320
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
                                   WHERE c.id_commande= AND c.id_users =320
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 19:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
                                   WHERE c.id_commande= AND c.id_users =292
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 19:29:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 19:29:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =140
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
                                   WHERE c.id_commande= AND c.id_users =140
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:33 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-04-20 19:31:33 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-04-20 19:31:33 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-04-20 19:31:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:34 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-04-20 19:31:34 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-04-20 19:31:34 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-04-20 19:31:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 19:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 20:15:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:16:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:16:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:18:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:20:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:20:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:21:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:22:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:23:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:24:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 20:24:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
                                   WHERE c.id_commande= AND c.id_users =206
                                   ORDER BY date_commande DESC
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 21:49:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-04-20 23:57:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:08 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-04-20 23:57:08 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-04-20 23:57:08 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-04-20 23:57:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-07 00:00:00" AND date_commande < "2019-04-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-08 00:00:00" AND date_commande < "2019-04-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-10 00:00:00" AND date_commande < "2019-04-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-11 00:00:00" AND date_commande < "2019-04-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-13 00:00:00" AND date_commande < "2019-04-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-14 00:00:00" AND date_commande < "2019-04-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-15 00:00:00" AND date_commande < "2019-04-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-16 00:00:00" AND date_commande < "2019-04-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-18 00:00:00" AND date_commande < "2019-04-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-20 00:00:00" AND date_commande < "2019-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-21 00:00:00" AND date_commande < "2019-04-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-22 00:00:00" AND date_commande < "2019-04-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-23 00:00:00" AND date_commande < "2019-04-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-24 00:00:00" AND date_commande < "2019-04-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-25 00:00:00" AND date_commande < "2019-04-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-26 00:00:00" AND date_commande < "2019-04-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-27 00:00:00" AND date_commande < "2019-04-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-28 00:00:00" AND date_commande < "2019-04-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-29 00:00:00" AND date_commande < "2019-04-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-04-20 23:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-04-30 00:00:00" AND date_commande < "2019-04-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
