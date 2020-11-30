<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-02-08 17:41:37 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-08 17:41:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 262
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 270
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 289
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 294
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 897
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 898
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 903
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 914
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1067
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1099
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1163
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1167
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1237
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1549
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1827
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1828
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1833
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1844
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 18:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 18:38:27 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-08 18:38:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 18:41:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 262
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 270
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 289
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 294
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 897
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 898
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 903
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 914
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1067
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1099
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1163
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1167
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1237
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1549
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1827
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1828
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1833
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1844
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 19:38:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 19:38:38 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-08 19:38:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 19:40:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 19:42:01 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 19:42:01 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 19:42:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 19:43:58 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 19:43:58 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 19:43:58 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 262
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 270
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 289
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 294
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 897
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 898
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 903
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 914
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1067
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1099
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1163
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1167
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1237
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1549
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1827
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1828
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1833
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1844
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 20:28:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3712
ERROR - 2020-02-08 20:28:25 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-08 20:28:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 20:29:27 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 20:29:27 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 20:29:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 262
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 270
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 289
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 294
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 897
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 898
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 903
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 914
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1067
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1099
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1163
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1167
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1237
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1549
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1827
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1828
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1833
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1844
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 20:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3712
ERROR - 2020-02-08 20:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 20:36:39 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 20:36:39 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 20:36:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 20:42:15 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 20:42:15 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 20:42:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 20:55:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 20:56:09 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 20:56:09 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 20:56:09 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 20:58:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 262
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 270
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 289
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 294
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 897
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 898
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 903
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 914
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1067
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1099
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1163
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1167
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1237
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1549
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1827
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1828
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1833
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1844
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 21:01:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3712
ERROR - 2020-02-08 21:01:32 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-08 21:01:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:02:17 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:02:17 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:02:17 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:05:41 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:05:41 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:05:41 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:08:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:09:29 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:09:29 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:09:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:12:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:13:13 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:13:13 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:13:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 262
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 270
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 289
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 294
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 897
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 898
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 903
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 914
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1067
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1099
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1163
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1167
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1237
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1549
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1827
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1828
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1833
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1844
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 21:34:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3712
ERROR - 2020-02-08 21:34:34 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-08 21:34:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:35:09 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:35:09 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:35:09 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:40:30 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:40:30 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:40:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:42:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:43:07 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:43:07 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:43:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:44:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:50:16 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:50:16 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:50:16 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:51:05 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:51:05 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:51:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:54:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:54:34 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:54:34 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:54:34 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:56:58 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:56:58 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:56:58 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:58:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 21:59:06 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 21:59:06 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 21:59:06 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 17
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 74
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 9
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 10
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 12
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 13
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 15
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 16
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 24
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 25
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 27
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 28
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 30
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 31
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 36
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 37
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 40
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 41
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 44
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 45
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 56
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 57
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2044
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2651
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2651
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2651
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2651
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 23:03:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3712
ERROR - 2020-02-08 23:03:40 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-08 23:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 23:04:54 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 23:04:54 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:04:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:09:40 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 23:09:40 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:09:40 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:10:18 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 23:10:18 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:10:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:15:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 23:16:15 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 23:16:15 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:16:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:17:36 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1819
ERROR - 2020-02-08 23:17:36 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1819
ERROR - 2020-02-08 23:17:37 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1819
ERROR - 2020-02-08 23:17:37 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1819
ERROR - 2020-02-08 23:17:47 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1819
ERROR - 2020-02-08 23:17:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1819
ERROR - 2020-02-08 23:17:48 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1819
ERROR - 2020-02-08 23:17:48 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1819
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 17
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 74
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 9
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 10
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 12
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 13
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 15
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 16
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 24
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 25
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 27
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 28
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 30
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 31
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 36
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 37
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 40
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 41
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 44
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 45
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 56
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 57
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2044
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2651
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2651
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2651
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2651
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 23:17:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3712
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 262
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 270
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 289
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 294
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 897
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 898
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 903
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 914
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1067
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1099
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1163
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1167
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1237
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1549
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1827
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1828
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1833
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1844
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 23:18:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3712
ERROR - 2020-02-08 23:18:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 23:27:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 23:28:21 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 23:28:21 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:28:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 13
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 262
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 270
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 289
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 294
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 897
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 898
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 903
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 914
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1067
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1099
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1163
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1167
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1237
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1549
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1827
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1828
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1833
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1844
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2354
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2531
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2585
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3297
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3481
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3618
ERROR - 2020-02-08 23:35:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3722
ERROR - 2020-02-08 23:35:04 --> Query error: Unknown column 'avec_verre' in 'where clause' - DELETE FROM commande_montures_temp WHERE (id_client = "147" AND status=0 AND avec_verre = 0) OR (id_client = "147" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) 
ERROR - 2020-02-08 23:35:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2020-02-08 23:35:41 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 702
ERROR - 2020-02-08 23:35:41 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
ERROR - 2020-02-08 23:35:41 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 707
