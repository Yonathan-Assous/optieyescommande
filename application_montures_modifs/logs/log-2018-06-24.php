<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2018-06-24 10:17:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =130
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =130
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:18:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
                                   WHERE c.id_commande= AND c.id_users =78
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:18:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =130
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =130
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:19:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
                                   WHERE c.id_commande= AND c.id_users =78
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:19:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
                                   WHERE c.id_commande= AND c.id_users =78
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:22:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
                                   WHERE c.id_commande= AND c.id_users =78
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:22:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =130
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =130
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:24:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
                                   WHERE c.id_commande= AND c.id_users =78
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:24:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
                                   WHERE c.id_commande= AND c.id_users =78
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:25:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =130
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =130
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:27:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =130
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =130
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =145
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =145
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:29:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =130
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =130
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:29:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =145
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =145
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:30:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =145
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =145
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:33:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:33:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:34:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =201
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =201
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:38:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =130
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =130
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:43:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =308
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:44:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =234
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =234
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =115
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =115
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:48:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =27
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
                                   WHERE c.id_commande= AND c.id_users =27
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:54:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =308
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:54:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 10:54:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =152
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =152
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:55:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =308
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 10:55:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =308
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:01:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:10:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:22:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:23:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =188
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =188
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:27:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:28:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:29:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:32:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:33:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:33:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:34:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:36:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:36:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 11:37:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:38:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:40:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =152
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =152
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:45:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =173
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:47:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:47:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:48:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:48:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:54:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =138
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =138
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 11:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 12:09:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =87
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
                                   WHERE c.id_commande= AND c.id_users =87
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 12:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =87
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
                                   WHERE c.id_commande= AND c.id_users =87
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 12:10:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =87
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
                                   WHERE c.id_commande= AND c.id_users =87
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:19:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:19:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =234
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =234
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:26:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:36:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =234
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =234
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:43:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 12:44:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =201
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =201
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 12:50:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2018-06-24 13:00:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =173
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:02:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =173
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:05:37 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1451
ERROR - 2018-06-24 13:05:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1451
ERROR - 2018-06-24 13:05:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2018-06-24 13:05:39 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:39 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:44 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:44 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:44 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:46 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:46 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:55 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:05:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 1726
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:06:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:06:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =201
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =201
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:10:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =201
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =201
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:11:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =152
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =152
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:14:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =27
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
                                   WHERE c.id_commande= AND c.id_users =27
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:14:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =151
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =151
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:15:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =27
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
                                   WHERE c.id_commande= AND c.id_users =27
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:22:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =173
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:25:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =109
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =109
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:28:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:33:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2018-06-24 13:34:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =308
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:52:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:52:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:52:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =291
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =291
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 13:59:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 13:59:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 14:01:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 14:28:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 14:50:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 15:21:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 15:41:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2018-06-24 15:41:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2018-06-24 15:45:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =237
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =237
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:49:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 15:50:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:46:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 16:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1754
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 17:30:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2298
ERROR - 2018-06-24 17:33:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =109
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =109
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 17:36:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =308
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 17:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =109
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =109
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 18:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:26:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:27:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:18:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-03 00:00:00" AND date_commande < "2018-06-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-08 00:00:00" AND date_commande < "2018-06-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-09 00:00:00" AND date_commande < "2018-06-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-11 00:00:00" AND date_commande < "2018-06-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-13 00:00:00" AND date_commande < "2018-06-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-14 00:00:00" AND date_commande < "2018-06-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-16 00:00:00" AND date_commande < "2018-06-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-17 00:00:00" AND date_commande < "2018-06-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-18 00:00:00" AND date_commande < "2018-06-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-20 00:00:00" AND date_commande < "2018-06-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-23 00:00:00" AND date_commande < "2018-06-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-24 00:00:00" AND date_commande < "2018-06-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-25 00:00:00" AND date_commande < "2018-06-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-26 00:00:00" AND date_commande < "2018-06-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-27 00:00:00" AND date_commande < "2018-06-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-28 00:00:00" AND date_commande < "2018-06-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-29 00:00:00" AND date_commande < "2018-06-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 21:31:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-06-30 00:00:00" AND date_commande < "2018-06-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-06-24 22:04:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 22:06:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 22:07:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 22:08:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 22:12:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 22:13:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 22:14:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 22:14:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2018-06-24 22:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
