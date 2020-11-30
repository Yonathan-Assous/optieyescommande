<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-02-14 00:00:23 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:00:23 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:00:23 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:00:23 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:00:23 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:00:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:01:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:02:00 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-14 00:02:00 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:02:00 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:02:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:03:14 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-14 00:03:14 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:03:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:05:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:05:37 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:05:37 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:05:37 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:05:37 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:05:37 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:05:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:07:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:02 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-14 00:07:02 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-14 00:07:02 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-14 00:07:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:07:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-14 00:11:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:11:35 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-14 00:11:35 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:11:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:14:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:14:28 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-14 00:14:28 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:14:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:21:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:21:33 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-14 00:21:33 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:21:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:22:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:22:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:23:27 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-14 00:23:27 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:23:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:24:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:24:28 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-14 00:24:28 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:24:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 00:32:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:32:14 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:32:14 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:32:14 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:32:14 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:32:14 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 00:32:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:33:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:34:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:34:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-14 00:35:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-14 00:35:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 17
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 74
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 9
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 10
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 12
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 13
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 15
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 16
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 24
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 25
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 27
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 28
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 30
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 31
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 36
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 37
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 40
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 41
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 44
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 45
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 56
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 57
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2071
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2679
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2679
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2679
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2679
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-14 13:15:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-14 13:17:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 13:17:42 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-14 13:17:42 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 13:17:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 13:19:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 13:20:11 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 784
ERROR - 2020-02-14 13:20:11 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 13:20:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 789
ERROR - 2020-02-14 13:24:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:24:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:24:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:24:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:24:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:24:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 13:28:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-14 13:28:55 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:28:55 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:28:55 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:28:55 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:28:55 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-14 13:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
