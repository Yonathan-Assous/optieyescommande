<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-12-08 01:02:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 01:06:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 01:10:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 01:11:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 01:15:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 01:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 09:43:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 10:10:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:14 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-08 10:10:14 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-08 10:10:14 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-08 10:10:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:10:56 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-08 10:11:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '18'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '102'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '113'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '113'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '113'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '114'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '124'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '124'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '124'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '141'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '141'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '141'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =324
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =324
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 10:11:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '174'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '296'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '297'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '297'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '297'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '298'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '305'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '307'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '308'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '309'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '310'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '311'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '312'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '313'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '314'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '320'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '324'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '326'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '331'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '335'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '335'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '335'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '337'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '339'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '340'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '345'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '348'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '351'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '351'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '351'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:11:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:11:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '354'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '358'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '358'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '358'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '364'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '370'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '370'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '370'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '373'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '374'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '377'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '378'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '381'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '381'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '381'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '383'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '384'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '384'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '384'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '389'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '391'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '397'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '398'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '400'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '401'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '405'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '412'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '414'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '418'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '418'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '418'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '423'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '423'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '423'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '430'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '430'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '430'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '431'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '431'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '431'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '438'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '438'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '438'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '446'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '446'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '446'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '448'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '448'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '448'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '449'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '449'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '449'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '451'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '451'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '451'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '18'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '102'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '113'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '113'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '113'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '114'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '124'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '124'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '124'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '141'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '141'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '141'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '174'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '296'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '297'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '297'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '297'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '298'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '305'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '307'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:12:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:12:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '308'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '309'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '310'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '311'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '312'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '313'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '314'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '320'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '324'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '326'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '331'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '335'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '335'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '335'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '337'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '339'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '340'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '345'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '348'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '351'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '351'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '351'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '354'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '358'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '358'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '358'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '364'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '370'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '370'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '370'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '373'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '374'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '377'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '378'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '381'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '381'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '381'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '383'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '384'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '384'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '384'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '389'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '391'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '397'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '398'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '400'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '401'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '405'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '412'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '414'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '418'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '418'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '418'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '423'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '423'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '423'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '430'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '430'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '430'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '431'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '431'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '431'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '438'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '438'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '438'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '446'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '446'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '446'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '448'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '448'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '448'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '449'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '449'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '449'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:13:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 10:13:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '451'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '451'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '451'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 10:43:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 10:44:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =446
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 10:52:50 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 10:53:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =153
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =153
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:17 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-08 10:53:17 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-08 10:53:17 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-08 10:53:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 10:53:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 11:01:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 11:02:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =234
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 11:14:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
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
ERROR - 2019-12-08 11:16:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 11:17:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =115
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 11:38:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =370
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =370
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 11:45:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
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
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2227
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2227
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-08 11:51:01 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2227
ERROR - 2019-12-08 11:51:01 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2227
ERROR - 2019-12-08 11:52:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =154
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =154
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 11:54:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =431
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =431
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 11:55:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =431
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =431
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 12:09:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =269
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =269
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 12:32:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =153
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =153
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 12:39:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =430
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =430
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 12:40:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 12:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2019-12-08 12:52:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-12-08 12:52:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =174
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =174
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 12:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =109
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 12:59:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 13:02:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 13:02:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '11-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '11-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '11-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '11-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '11-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '11-2019'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 13:02:56 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/optieyescommande.com/httpdocs/application/core/MY_Controller.php 60
ERROR - 2019-12-08 13:03:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 13:03:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '10-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '10-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '10-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '10-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '10-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '10-2019'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 13:03:38 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/optieyescommande.com/httpdocs/application/core/MY_Controller.php 60
ERROR - 2019-12-08 13:04:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 13:04:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2019'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-08 13:04:07 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/optieyescommande.com/httpdocs/application/core/MY_Controller.php 60
ERROR - 2019-12-08 13:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 13:04:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =364
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =364
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 13:04:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-08 13:04:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2019-12-08 13:04:52 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/optieyescommande.com/httpdocs/application/core/MY_Controller.php 60
ERROR - 2019-12-08 13:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 13:05:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =364
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =364
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 13:05:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =364
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =364
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 13:10:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-12-08 13:11:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =154
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =154
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 13:12:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-12-08 13:13:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-12-08 13:27:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =438
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =438
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 13:33:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 13:38:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =115
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 13:40:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =115
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 13:41:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =115
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 13:43:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 13:44:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
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
ERROR - 2019-12-08 13:45:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =446
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 13:51:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =446
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 13:51:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =446
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 13:51:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
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
ERROR - 2019-12-08 13:51:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
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
ERROR - 2019-12-08 13:55:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:15 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-08 13:55:15 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-08 13:55:15 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-08 13:55:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =446
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:55:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 13:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =446
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 14:13:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 14:13:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-08 14:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =307
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 14:15:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:12 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-08 14:15:12 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-08 14:15:12 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-08 14:15:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:15:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 14:19:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =249
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =249
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 14:25:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =249
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =249
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 14:46:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 15:04:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =370
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =370
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 15:48:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =448
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =448
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 15:49:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =269
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =269
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 17:03:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =448
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =448
                                   ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:39 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-08 18:27:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 18:28:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-08 20:17:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 20:18:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 20:40:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 20:45:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 21:05:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 21:05:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 21:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-12-08 21:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =420
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =420
                                   ORDER BY date_commande DESC
