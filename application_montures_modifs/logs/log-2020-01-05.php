<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-01-05 10:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =430
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:20:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:20:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:21:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:25:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:28:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:31:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 10:32:52 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 10:34:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:36:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:37:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:37:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:37:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:38:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:39:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:41:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:42:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =109
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:42:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =152
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:42:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =152
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:42:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =370
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:44:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
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
ERROR - 2020-01-05 10:44:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =370
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:44:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:45:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:23 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-01-05 10:45:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:45:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:46:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:46:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 10:54:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =364
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:54:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =364
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:56:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 10:57:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:00:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:01:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:02:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:02:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:03:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:04:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:11:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-01-05 11:11:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2020-01-05 11:17:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:24:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2293
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2293
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2293
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2293
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2293
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2293
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2275
ERROR - 2020-01-05 11:26:56 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2293
ERROR - 2020-01-05 11:26:56 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2293
ERROR - 2020-01-05 11:30:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
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
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 11:30:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 11:32:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:33:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =324
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:40:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =360
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =360
                                   ORDER BY date_commande DESC
ERROR - 2020-01-05 11:45:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =234
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:45:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =234
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 11:48:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =370
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:00:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:00:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:00:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:02:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =234
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:03:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:03:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =151
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:05:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =151
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:06:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =151
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:26:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:26:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:27:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =69
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
                                   WHERE c.id_commande= AND c.id_users =69
                                   ORDER BY date_commande DESC
ERROR - 2020-01-05 12:29:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =151
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:30:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-01-05 12:30:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2020-01-05 12:30:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-01-05 12:30:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2020-01-05 12:30:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-01-05 12:30:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2020-01-05 12:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:39:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =151
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:41:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =18
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
                                   WHERE c.id_commande= AND c.id_users =18
                                   ORDER BY date_commande DESC
ERROR - 2020-01-05 12:44:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =177
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =177
                                   ORDER BY date_commande DESC
ERROR - 2020-01-05 12:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =153
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 12:52:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 12:52:13 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 12:52:13 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:52:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:52:13 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:52:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 12:52:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =201
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:57:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =430
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 12:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =237
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 13:03:17 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1520
ERROR - 2020-01-05 13:03:17 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1520
ERROR - 2020-01-05 13:03:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2020-01-05 13:03:19 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:23 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:24 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:27 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:28 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:30 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1795
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 13:03:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 13:03:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =324
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 13:37:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 13:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =177
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =177
                                   ORDER BY date_commande DESC
ERROR - 2020-01-05 13:49:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 14:02:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
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
ERROR - 2020-01-05 14:07:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =269
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 14:08:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =269
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 14:08:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =269
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 14:10:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =269
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 14:14:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 14:14:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =269
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 14:18:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =345
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =345
                                   ORDER BY date_commande DESC
ERROR - 2020-01-05 14:18:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 14:26:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2020-01-05 14:39:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =370
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 15:17:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 15:17:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 15:18:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 15:49:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =345
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =345
                                   ORDER BY date_commande DESC
ERROR - 2020-01-05 16:32:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-01-05 16:32:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '11-2019'
            AND id_etat_commande = 6
            AND id_users = '396'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '11-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '11-2019'
            AND id_etat_commande = 6
            AND id_users = '396'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '11-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '11-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '11-2019'
        AND id_etat_commande = 6
        AND id_users = '396'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-01-05 17:35:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =269
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 17:35:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2020-01-05 17:36:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =337
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 17:44:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =337
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 17:45:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =337
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-01-05 18:11:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =348
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =348
                                   ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:09 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-01-05 18:58:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 18:58:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:18 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-01-05 23:08:18 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-01-05 23:08:18 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-01-05 23:08:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-05 00:00:00" AND date_commande < "2020-01-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-06 00:00:00" AND date_commande < "2020-01-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-07 00:00:00" AND date_commande < "2020-01-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-08 00:00:00" AND date_commande < "2020-01-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-09 00:00:00" AND date_commande < "2020-01-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-10 00:00:00" AND date_commande < "2020-01-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-11 00:00:00" AND date_commande < "2020-01-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-12 00:00:00" AND date_commande < "2020-01-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-13 00:00:00" AND date_commande < "2020-01-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-14 00:00:00" AND date_commande < "2020-01-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-15 00:00:00" AND date_commande < "2020-01-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-16 00:00:00" AND date_commande < "2020-01-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-17 00:00:00" AND date_commande < "2020-01-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-18 00:00:00" AND date_commande < "2020-01-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-19 00:00:00" AND date_commande < "2020-01-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-20 00:00:00" AND date_commande < "2020-01-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-21 00:00:00" AND date_commande < "2020-01-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:08:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-22 00:00:00" AND date_commande < "2020-01-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-23 00:00:00" AND date_commande < "2020-01-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-25 00:00:00" AND date_commande < "2020-01-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-26 00:00:00" AND date_commande < "2020-01-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-27 00:00:00" AND date_commande < "2020-01-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-28 00:00:00" AND date_commande < "2020-01-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-29 00:00:00" AND date_commande < "2020-01-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-30 00:00:00" AND date_commande < "2020-01-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-05 23:09:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-31 00:00:00" AND date_commande < "2020-01-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
