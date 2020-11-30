<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-01-24 10:34:55 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2499
ERROR - 2020-01-24 12:09:09 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2499
ERROR - 2020-01-24 12:14:09 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2499
ERROR - 2020-01-24 12:23:45 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2497
ERROR - 2020-01-24 12:30:24 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2497
ERROR - 2020-01-24 12:33:36 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2497
ERROR - 2020-01-24 12:34:26 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2497
ERROR - 2020-01-24 13:05:08 --> Severity: Notice  --> Undefined variable: dataOrder /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1021
ERROR - 2020-01-24 13:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND tarif_livraison > 0
                                      AND id_etat_comman' at line 22 - SELECT date_update_commande,c.id_commande,c.id_type_generation_verre,date_commande, c.tarif_express, c.id_etat_commande,information_commande,type_commande,ancienne_commande,total_commande,reference_client,libelle_etat_commande,IF(libelle_verre_personnalise <> 'NULL',libelle_verre_personnalise,generation_verre) as generation_verre,
                                   type_generation_verre,libelle_verre,commentaire,c.prix_verre,intitule_bl, (TarifLivraison1 + COALESCE(TarifLivraison2, 0)) as TarifLivraison
                                   FROM commande c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
                                      FROM commande cc
                                      WHERE cc.id_users = 
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
                                      WHERE cc.id_users = 
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                      GROUP BY id_users,date(date_update_commande)
                                   ) as tarif_livr2
                                   ON (
                                      c.id_commande = idCommande2
                                   )
                                   WHERE id_users= 
                                   ORDER BY date_commande DESC
ERROR - 2020-01-24 13:09:14 --> Severity: Notice  --> Undefined variable: dataOrder /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1021
ERROR - 2020-01-24 13:09:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND tarif_livraison > 0
                                      AND id_etat_comman' at line 22 - SELECT date_update_commande,c.id_commande,c.id_type_generation_verre,date_commande, c.tarif_express, c.id_etat_commande,information_commande,type_commande,ancienne_commande,total_commande,reference_client,libelle_etat_commande,IF(libelle_verre_personnalise <> 'NULL',libelle_verre_personnalise,generation_verre) as generation_verre,
                                   type_generation_verre,libelle_verre,commentaire,c.prix_verre,intitule_bl, (TarifLivraison1 + COALESCE(TarifLivraison2, 0)) as TarifLivraison
                                   FROM commande c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
                                      FROM commande cc
                                      WHERE cc.id_users = 
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
                                      WHERE cc.id_users = 
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                      GROUP BY id_users,date(date_update_commande)
                                   ) as tarif_livr2
                                   ON (
                                      c.id_commande = idCommande2
                                   )
                                   WHERE id_users= 
                                   ORDER BY date_commande DESC
ERROR - 2020-01-24 14:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-01-24 00:00:00" AND date_commande < "2020-01-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-01-24 14:08:32 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-01-24 14:08:32 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-01-24 14:08:32 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-01-24 14:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2020-01-24 14:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2020-01-24 14:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7786
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7787
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 24
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 25
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 26
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 27
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 27
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 30
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 31
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 32
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 40
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 56
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 84
ERROR - 2020-01-24 14:37:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 107
ERROR - 2020-01-24 14:40:46 --> Severity: Warning  --> Missing argument 2 for admin::supprimer_monture_temp() /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7798
ERROR - 2020-01-24 14:40:46 --> Severity: Notice  --> Undefined variable: id_client /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7801
ERROR - 2020-01-24 14:40:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2020-01-24 14:42:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2020-01-24 14:42:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2020-01-24 14:42:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7786
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7787
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 24
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 25
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 26
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 27
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 27
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 30
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 31
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 32
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 40
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 56
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 84
ERROR - 2020-01-24 14:42:33 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/ajax_show_montures_order.php 107
ERROR - 2020-01-24 14:49:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2020-01-24 14:59:51 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7893
ERROR - 2020-01-24 15:03:53 --> Severity: Warning  --> scandir(): open_basedir restriction in effect. File(/var/www/vhosts/optieyescommande.com/httpdocs/static/aa) is not within the allowed path(s): (/var/www/vhosts/ns398422.ip-176-31-125.eu/:/tmp/) /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2435
ERROR - 2020-01-24 15:03:53 --> Severity: Warning  --> scandir(/var/www/vhosts/optieyescommande.com/httpdocs/static/aa): failed to open dir: Operation not permitted /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2435
ERROR - 2020-01-24 15:03:53 --> Severity: Warning  --> scandir(): (errno 1): Operation not permitted /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2435
ERROR - 2020-01-24 15:03:53 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2439
