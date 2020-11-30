<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-02-13 00:14:58 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 00:15:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 00:15:15 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 00:15:15 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 00:15:15 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 00:15:15 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 00:15:15 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 00:15:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 16:33:53 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 16:34:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 16:34:46 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-13 16:34:46 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 16:34:46 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 16:40:51 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-13 16:40:51 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 16:40:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 19:56:42 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 19:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 19:57:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 19:57:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 19:57:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 19:57:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 19:57:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:02:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 20:14:34 --> Severity: Notice  --> Undefined variable: carte_ok /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3566
ERROR - 2020-02-13 20:14:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 20:14:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:14:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:14:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:14:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:14:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:14:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 20:24:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 20:24:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:24:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:24:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:24:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:24:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 20:24:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 20:45:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:20 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 20:45:20 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 20:45:20 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 20:45:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:45:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:46:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 20:56:17 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 20:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 20:58:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 17
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 74
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 9
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 10
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 12
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 13
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 15
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 16
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 24
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 25
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 27
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 28
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 30
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 31
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 36
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 37
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 40
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 41
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 44
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 45
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 56
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 57
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2006
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2062
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2372
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2549
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2603
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2669
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2669
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2669
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2669
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3315
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3499
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3639
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3743
ERROR - 2020-02-13 20:59:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4167
ERROR - 2020-02-13 20:59:23 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 20:59:44 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 20:59:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1841
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1842
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1847
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1858
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2006
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2372
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2549
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2603
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3315
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3499
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3639
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3743
ERROR - 2020-02-13 21:00:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4167
ERROR - 2020-02-13 21:00:42 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 21:00:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:04:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:13:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:16:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:25:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:31:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:21 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:31:30 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 21:31:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:31:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 585
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1079
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1107
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1111
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1174
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1183
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1253
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1565
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1607
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1853
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1858
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1869
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2017
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2383
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-13 21:33:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-13 21:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1079
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1107
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1111
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1174
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1183
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1253
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1565
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1607
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1853
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1858
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1869
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2017
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2383
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-13 21:34:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-13 21:35:02 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 21:35:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:36:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-13 21:38:50 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-13 21:41:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:29 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 21:42:29 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 21:42:29 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 21:42:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:42:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:43:56 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2020-02-13 21:44:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1079
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1107
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1111
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1174
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1183
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1253
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1565
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1607
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1853
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1858
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1869
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2017
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2383
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-13 21:44:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-13 21:46:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:46:55 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 21:46:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:46:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:46:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:46:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:46:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1079
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1107
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1111
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1174
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1183
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1253
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1565
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1607
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1853
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1858
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1869
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2017
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2383
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-13 21:47:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-13 21:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:22 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 21:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 21:47:30 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 21:47:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:47:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:47:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:47:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:47:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:47:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:47:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:47:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:48:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:48:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:48:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:49:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:49:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:49:11 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 21:49:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:49:26 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:49:26 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:49:26 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:49:26 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:49:26 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-13 21:49:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:49:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:50:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:50:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:51:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:53:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 21:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:00:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:01:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:19 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:01:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:01:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:01:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:02:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1079
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1107
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1111
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1174
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1183
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1253
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1565
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1607
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1853
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1858
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1869
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2017
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2383
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2561
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2615
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3327
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3511
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3651
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3755
ERROR - 2020-02-13 22:06:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4179
ERROR - 2020-02-13 22:06:28 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 22:06:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:08:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:09:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:09:33 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-13 22:09:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:13:18 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:13:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:13:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:13:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY date_commande DESC' at line 21 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:15:19 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:15:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:15:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:15:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY date_commande DESC' at line 21 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:17:46 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:17:46 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:17:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:18:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:18:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:19:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:20:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:20:44 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:20:44 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 22:20:44 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 22:21:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:21:23 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:21:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:21:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 999
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1004
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1008
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1069
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1380
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1659
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1665
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1676
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2183
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2361
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2408
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3098
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3281
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3417
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3519
ERROR - 2020-02-13 22:22:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3781
ERROR - 2020-02-13 22:22:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:23:27 --> Query error: Unknown column 'jquery.min.map' in 'where clause' - SELECT * FROM users WHERE id_users=jquery.min.map
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 999
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1004
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1008
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1069
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1380
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1659
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1665
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1676
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1768
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2158
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2183
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2219
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2278
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2313
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2361
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2408
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2527
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2565
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2594
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2658
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2697
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3098
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3117
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3198
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3281
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3417
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3519
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3664
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3781
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4074
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4268
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4315
ERROR - 2020-02-13 22:23:27 --> Query error: Unknown column 'toastr.js.map' in 'where clause' - SELECT * FROM users WHERE id_users=toastr.js.map
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 999
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1004
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1008
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1069
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1380
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1659
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1665
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1676
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1768
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2158
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2183
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2219
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2278
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2313
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2361
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2408
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2527
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2565
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2594
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2658
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2697
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3098
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3117
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3198
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3281
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3417
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3519
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3664
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3781
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4074
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4268
ERROR - 2020-02-13 22:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4315
ERROR - 2020-02-13 22:25:10 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:25:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:25:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:25:53 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:25:53 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:25:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:26:38 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:26:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:26:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:26:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:26:57 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:26:57 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 22:26:57 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 22:27:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:27:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:29:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:30:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:32:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:33:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:33:48 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:33:48 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 22:33:48 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 22:34:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:34:19 --> Query error: Unknown column 'jquery.min.map' in 'where clause' - SELECT * FROM users WHERE id_users=jquery.min.map
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 999
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1003
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1008
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1012
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1073
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1384
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1663
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1664
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1669
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1680
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1772
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1773
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1774
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1774
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1775
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2162
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2187
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2223
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2282
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2317
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2365
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2412
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2531
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2569
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2598
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2662
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2701
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2708
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3102
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3121
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3202
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3209
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3285
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3421
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3523
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3668
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3785
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4078
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4272
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4319
ERROR - 2020-02-13 22:34:19 --> Query error: Unknown column 'toastr.js.map' in 'where clause' - SELECT * FROM users WHERE id_users=toastr.js.map
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 999
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1003
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1008
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1012
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1073
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1384
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1663
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1664
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1669
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1680
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1772
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1773
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1774
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1774
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1775
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2162
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2187
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2223
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2282
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2317
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2365
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2412
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2531
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2569
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2598
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2662
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2701
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2708
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3102
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3121
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3202
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3209
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3285
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3421
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3523
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3668
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3785
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4078
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4272
ERROR - 2020-02-13 22:34:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4319
ERROR - 2020-02-13 22:36:01 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:36:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:37:28 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:37:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:37:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:37:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:37:45 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:37:45 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 22:37:45 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 22:37:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:38:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:39:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:40:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:40:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:41:05 --> Query error: Unknown column 'jquery.min.map' in 'where clause' - SELECT * FROM users WHERE id_users=jquery.min.map
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 999
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1004
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1008
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1069
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1380
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1659
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1665
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1676
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1768
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2158
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2183
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2219
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2278
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2313
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2361
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2408
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2527
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2565
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2594
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2658
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2697
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3098
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3117
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3198
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3281
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3417
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3519
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3664
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3781
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3828
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4074
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4268
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4315
ERROR - 2020-02-13 22:41:05 --> Query error: Unknown column 'toastr.js.map' in 'where clause' - SELECT * FROM users WHERE id_users=toastr.js.map
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 999
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1004
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1008
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1069
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1380
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1659
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1665
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1676
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1768
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2158
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2183
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2219
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2278
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2313
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2361
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2408
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2527
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2565
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2594
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2658
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2697
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3098
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3117
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3198
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3281
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3417
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3519
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3664
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3781
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3828
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4074
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4268
ERROR - 2020-02-13 22:41:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4315
ERROR - 2020-02-13 22:41:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:41:49 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:41:49 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 22:41:49 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 22:42:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:45:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:46:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:46:17 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:46:17 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 22:46:17 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 22:46:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:46:56 --> Query error: Unknown column 'jquery.min.map' in 'where clause' - SELECT * FROM users WHERE id_users=jquery.min.map
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1015
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1076
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1387
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1667
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1672
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1775
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1776
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1778
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2165
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2190
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2285
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2320
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2368
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2415
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2534
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2572
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2601
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2665
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3105
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3124
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3212
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3288
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3424
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3526
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3671
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3788
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4075
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4269
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4316
ERROR - 2020-02-13 22:46:56 --> Query error: Unknown column 'toastr.js.map' in 'where clause' - SELECT * FROM users WHERE id_users=toastr.js.map
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1015
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1076
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1387
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1667
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1672
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1775
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1776
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1778
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2165
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2190
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2285
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2320
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2368
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2415
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2534
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2572
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2601
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2665
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3105
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3124
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3212
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3288
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3424
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3526
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3671
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3788
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4075
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4269
ERROR - 2020-02-13 22:46:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4316
ERROR - 2020-02-13 22:47:47 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:47:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:47:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:48:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:49:29 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:49:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:49:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:49:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:49:40 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:49:40 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 22:49:40 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 22:49:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:50:01 --> Query error: Unknown column 'toastr.js.map' in 'where clause' - SELECT * FROM users WHERE id_users=toastr.js.map
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1015
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1076
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1387
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1667
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1672
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1775
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1776
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1778
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2165
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2190
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2285
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2320
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2368
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2415
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2534
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2572
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2601
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2665
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3105
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3124
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3212
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3288
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3424
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3526
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3671
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3788
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4075
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4269
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4316
ERROR - 2020-02-13 22:50:01 --> Query error: Unknown column 'jquery.min.map' in 'where clause' - SELECT * FROM users WHERE id_users=jquery.min.map
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1015
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1076
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1387
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1667
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1672
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1775
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1776
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1778
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2165
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2190
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2285
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2320
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2368
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2415
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2534
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2572
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2601
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2665
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3105
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3124
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3212
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3288
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3424
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3526
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3671
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3788
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4075
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4269
ERROR - 2020-02-13 22:50:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4316
ERROR - 2020-02-13 22:51:36 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:51:36 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:51:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1015
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1076
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1387
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1667
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1672
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2190
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2368
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2415
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2481
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2481
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2481
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2481
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3105
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3288
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3424
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3526
ERROR - 2020-02-13 22:51:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3788
ERROR - 2020-02-13 22:52:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:52:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:52:57 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:52:57 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 22:52:57 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 22:53:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1015
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1076
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1387
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1667
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1672
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2190
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2368
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2415
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2481
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2481
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2481
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2481
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3105
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3288
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3424
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3526
ERROR - 2020-02-13 22:53:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3788
ERROR - 2020-02-13 22:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 22:56:03 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 22:56:03 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 22:56:03 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 22:56:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =1
                                   ORDER BY date_commande DESC
ERROR - 2020-02-13 22:56:25 --> Query error: Unknown column 'jquery.min.map' in 'where clause' - SELECT * FROM users WHERE id_users=jquery.min.map
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1015
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1076
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1387
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1667
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1672
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1775
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1776
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1778
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2165
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2190
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2285
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2320
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2368
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2415
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2534
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2572
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2601
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2665
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3105
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3124
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3212
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3288
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3424
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3527
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3672
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3789
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4076
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4270
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4317
ERROR - 2020-02-13 22:56:25 --> Query error: Unknown column 'toastr.js.map' in 'where clause' - SELECT * FROM users WHERE id_users=toastr.js.map
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1015
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1076
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1387
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1667
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1672
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1775
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1776
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1777
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1778
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2165
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2190
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2285
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2320
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2368
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2415
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2534
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2572
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2601
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2665
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3105
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3124
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3212
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3288
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3424
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3527
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3672
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3789
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4076
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4270
ERROR - 2020-02-13 22:56:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4317
ERROR - 2020-02-13 22:57:44 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:57:44 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:57:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 22:58:02 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:58:02 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1667
ERROR - 2020-02-13 22:58:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
                                   ORDER BY date_commande DESC' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:01:32 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-13 23:01:32 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:01:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-13 23:10:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-13 23:11:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-13 23:28:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:29:16 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-13 23:29:16 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:29:16 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:29:27 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-13 23:29:27 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-13 23:29:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-13 23:40:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-13 23:40:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:41:10 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-13 23:41:10 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:41:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:41:24 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-13 23:41:24 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-13 23:41:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-13 23:41:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:41:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:41:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:41:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:41:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:41:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:41:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:42:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:42:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-13 23:42:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-13 23:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:02 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-13 23:46:02 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-13 23:46:02 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-13 23:46:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:46:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-13 23:46:49 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-13 23:46:49 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:46:49 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:47:03 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-13 23:47:03 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-13 23:47:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-13 23:48:10 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-13 23:48:10 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-13 23:50:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:50:30 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-13 23:50:30 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:50:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:50:41 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-13 23:50:41 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-13 23:50:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-13 23:53:08 --> Query error: Duplicate entry '366684-droit' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (366684, 'droit',13,'2020-02-13')
ERROR - 2020-02-13 23:53:08 --> Query error: Duplicate entry '366684-gauche' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (366684, 'gauche',13,'2020-02-13')
ERROR - 2020-02-13 23:55:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:55:30 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-13 23:55:30 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:55:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:58:37 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-13 23:58:37 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-13 23:58:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-13 23:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-13 23:59:15 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-13 23:59:15 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-13 23:59:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
