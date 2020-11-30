<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-08-17 09:43:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
                                   WHERE c.id_commande= AND c.id_users =400
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 10:08:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 10:08:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 10:10:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 10:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 10:33:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
ERROR - 2019-08-17 10:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
ERROR - 2019-08-17 10:40:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
ERROR - 2019-08-17 10:41:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
ERROR - 2019-08-17 10:43:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 10:53:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =246
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
                                   WHERE c.id_commande= AND c.id_users =246
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 10:57:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 10:57:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 11:13:52 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1454
ERROR - 2019-08-17 11:13:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1454
ERROR - 2019-08-17 11:13:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2019-08-17 11:13:55 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 11:13:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 11:14:01 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 11:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 11:14:03 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 11:14:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 11:14:05 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 11:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 11:14:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 11:14:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
ERROR - 2019-08-17 11:23:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
ERROR - 2019-08-17 11:23:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
ERROR - 2019-08-17 11:29:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =246
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
                                   WHERE c.id_commande= AND c.id_users =246
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 12:42:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 12:42:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 12:42:30 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2019-08-17 12:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =246
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
                                   WHERE c.id_commande= AND c.id_users =246
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 13:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
ERROR - 2019-08-17 13:11:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
ERROR - 2019-08-17 13:20:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
ERROR - 2019-08-17 13:22:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
ERROR - 2019-08-17 14:30:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =423
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
                                   WHERE c.id_commande= AND c.id_users =423
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 14:30:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =137
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
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 15:00:20 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 15:00:20 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 15:02:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
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
ERROR - 2019-08-17 15:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
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
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 15:19:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 15:20:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
ERROR - 2019-08-17 15:26:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =137
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
ERROR - 2019-08-17 15:33:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 15:51:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
ERROR - 2019-08-17 15:51:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
ERROR - 2019-08-17 15:53:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
ERROR - 2019-08-17 16:02:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 16:06:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 16:13:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =257
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
                                   WHERE c.id_commande= AND c.id_users =257
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 16:16:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =257
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
                                   WHERE c.id_commande= AND c.id_users =257
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 16:21:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 16:22:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =114
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
                                   WHERE c.id_commande= AND c.id_users =114
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 16:22:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =257
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
                                   WHERE c.id_commande= AND c.id_users =257
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 16:37:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 16:37:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
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
ERROR - 2019-08-17 16:39:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
ERROR - 2019-08-17 16:44:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
ERROR - 2019-08-17 16:46:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
ERROR - 2019-08-17 17:04:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =417
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
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 17:11:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
ERROR - 2019-08-17 17:11:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
ERROR - 2019-08-17 17:16:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =137
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
ERROR - 2019-08-17 17:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =137
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
ERROR - 2019-08-17 17:24:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =137
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
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 17:39:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 17:42:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 17:58:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 17:58:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 17:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =253
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
ERROR - 2019-08-17 18:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =423
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
                                   WHERE c.id_commande= AND c.id_users =423
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:04:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:05:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =423
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
                                   WHERE c.id_commande= AND c.id_users =423
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 18:05:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =383
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
ERROR - 2019-08-17 18:08:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =246
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
                                   WHERE c.id_commande= AND c.id_users =246
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 18:09:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:13:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:14:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:15:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:15:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
                                   WHERE c.id_commande= AND c.id_users =400
                                   ORDER BY date_commande DESC
ERROR - 2019-08-17 18:15:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:31:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:46:20 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1454
ERROR - 2019-08-17 18:46:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1454
ERROR - 2019-08-17 18:46:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2019-08-17 18:46:23 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1454
ERROR - 2019-08-17 18:46:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1454
ERROR - 2019-08-17 18:46:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2019-08-17 18:46:26 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 18:46:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 18:46:46 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 18:46:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 18:46:46 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 18:46:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1729
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:46:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 18:47:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:48:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:18 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:18 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-08-17 18:51:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:51:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-08-17 18:52:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 18:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
ERROR - 2019-08-17 19:01:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
ERROR - 2019-08-17 19:02:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
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
ERROR - 2019-08-17 19:02:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =245
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
ERROR - 2019-08-17 19:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 19:08:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =283
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
ERROR - 2019-08-17 19:08:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:18 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-08-17 19:08:18 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-08-17 19:08:18 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-08-17 19:08:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:08:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 19:11:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 19:18:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =292
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
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 19:22:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 19:42:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
ERROR - 2019-08-17 19:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
ERROR - 2019-08-17 19:42:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
ERROR - 2019-08-17 19:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
ERROR - 2019-08-17 19:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =206
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
ERROR - 2019-08-17 19:47:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 19:58:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
ERROR - 2019-08-17 20:01:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
ERROR - 2019-08-17 20:10:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:07 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-08-17 20:10:07 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-08-17 20:10:07 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-08-17 20:10:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 20:10:37 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/facture_client.php 5
ERROR - 2019-08-17 20:11:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '18'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '29'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '30'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '41'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '114'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '136'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '141'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '141'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '141'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '149'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '246'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '247'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:11:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:11:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '257'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '260'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '265'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '268'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2019-08-17 20:12:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '282'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '285'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '285'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '285'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '296'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '298'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '305'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '307'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '308'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '309'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '310'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '312'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '313'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '314'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '315'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '316'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '316'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '316'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '320'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '324'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '326'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '331'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '337'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '339'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '343'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '344'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '344'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '344'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '345'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '348'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '360'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '360'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '360'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '361'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '361'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '361'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '362'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '362'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '362'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '364'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '373'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '374'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '377'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '383'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '389'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '391'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '397'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '398'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '400'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '401'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '405'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '408'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '408'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '408'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '412'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '414'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '417'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '417'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '417'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '423'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '423'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '423'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '18'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '29'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '30'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '41'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '114'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '136'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '141'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '141'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '141'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '149'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '246'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '247'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '257'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '260'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '265'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '268'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2019-08-17 20:12:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '282'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '285'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '285'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '285'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '296'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '298'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '305'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '307'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '308'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '309'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:12:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:12:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '310'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '312'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '313'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '314'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '315'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '316'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '316'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '316'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '320'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '324'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '326'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '331'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '337'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '339'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '343'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '344'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '344'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '344'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '345'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '348'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '360'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '360'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '360'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '361'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '361'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '361'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '362'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '362'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '362'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '364'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '373'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '374'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '377'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '383'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '389'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '391'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '397'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '398'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '400'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '401'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '405'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '408'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '408'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '408'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '412'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '414'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '417'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '417'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '417'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:13:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-08-17 20:13:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '423'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '423'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '423'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-08-17 20:22:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 21:28:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 21:45:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-08-17 22:11:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:11:57 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-08-17 22:11:57 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-08-17 22:11:57 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-08-17 22:11:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:11:57 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-08-17 22:11:57 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-08-17 22:11:57 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-08-17 22:11:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:11:57 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-08-17 22:11:57 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-08-17 22:11:57 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-08-17 22:19:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-08 00:00:00" AND date_commande < "2019-08-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-09 00:00:00" AND date_commande < "2019-08-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-10 00:00:00" AND date_commande < "2019-08-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-11 00:00:00" AND date_commande < "2019-08-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-12 00:00:00" AND date_commande < "2019-08-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-13 00:00:00" AND date_commande < "2019-08-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-14 00:00:00" AND date_commande < "2019-08-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-15 00:00:00" AND date_commande < "2019-08-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-16 00:00:00" AND date_commande < "2019-08-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-17 00:00:00" AND date_commande < "2019-08-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-18 00:00:00" AND date_commande < "2019-08-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-19 00:00:00" AND date_commande < "2019-08-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-20 00:00:00" AND date_commande < "2019-08-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-21 00:00:00" AND date_commande < "2019-08-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-22 00:00:00" AND date_commande < "2019-08-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-23 00:00:00" AND date_commande < "2019-08-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-24 00:00:00" AND date_commande < "2019-08-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-25 00:00:00" AND date_commande < "2019-08-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-26 00:00:00" AND date_commande < "2019-08-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-27 00:00:00" AND date_commande < "2019-08-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-28 00:00:00" AND date_commande < "2019-08-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-29 00:00:00" AND date_commande < "2019-08-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-30 00:00:00" AND date_commande < "2019-08-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-08-17 22:20:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-08-31 00:00:00" AND date_commande < "2019-08-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
