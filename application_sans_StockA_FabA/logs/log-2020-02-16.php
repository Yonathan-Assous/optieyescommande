<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-02-16 00:01:10 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 3069
ERROR - 2020-02-16 00:01:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 3075
ERROR - 2020-02-16 00:01:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 3088
ERROR - 2020-02-16 00:01:10 --> Query error: Column 'id_client' cannot be null - INSERT INTO `commande_montures_temp` (`id_client`, `id_monture`, `qty`, `date`, `status`) VALUES (NULL, 3, 1, '2020-02-16 00:01:10', 0)
ERROR - 2020-02-16 00:01:10 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 3144
ERROR - 2020-02-16 00:01:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 3144
ERROR - 2020-02-16 00:04:22 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2698
ERROR - 2020-02-16 00:07:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 00:07:37 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-16 00:07:37 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 00:07:37 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 00:12:31 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-16 00:12:31 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-16 00:12:33 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-16 00:27:55 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2698
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-16 09:49:19 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-16 09:49:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:49:41 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:49:41 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:49:41 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:49:41 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:49:41 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:49:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:50:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:50:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:50:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:50:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:50:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:50:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:50:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:52:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:52:58 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-16 09:52:58 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-16 09:52:58 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-16 09:53:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:53:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 09:53:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:53:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:53:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:53:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:53:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:53:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-16 09:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-16 09:55:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:56:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:56:27 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:56:27 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:56:27 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:56:27 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:56:27 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 09:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 09:57:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:01:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:02:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:03:12 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-16 10:03:12 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 10:03:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 87
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 87
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 88
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 88
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 89
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 89
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 90
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 90
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 91
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 91
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 93
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 93
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 94
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 94
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 94
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 94
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 96
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 96
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 96
ERROR - 2020-02-16 10:03:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 96
ERROR - 2020-02-16 10:04:07 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-16 10:04:07 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-16 10:04:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:04:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:33 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-16 10:04:33 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-16 10:04:33 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-16 10:04:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:04:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:20:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 10:20:05 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-16 10:20:05 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-16 10:20:05 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-16 10:22:12 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-16 10:22:12 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 10:22:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 87
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 87
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 88
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 88
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 89
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 89
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 90
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 90
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 91
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 91
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 93
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 93
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 94
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 94
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 94
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 94
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 96
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 96
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Undefined variable: montures /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 96
ERROR - 2020-02-16 10:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 96
ERROR - 2020-02-16 10:24:40 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-16 10:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:25:29 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-16 10:25:29 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 10:25:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 10:27:27 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-16 10:27:27 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-16 10:27:29 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-16 10:28:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:28:24 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 10:28:24 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 10:28:24 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 10:28:24 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 10:28:24 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 10:28:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-16 10:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-16 10:31:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-16 10:34:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1172
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1177
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1181
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1251
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1563
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1605
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1850
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1856
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1867
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2015
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2381
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2559
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2613
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3325
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3509
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3649
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3753
ERROR - 2020-02-16 10:34:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4177
ERROR - 2020-02-16 10:38:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:38:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:41:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 10:41:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 10:41:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:41:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:42:01 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 10:42:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 10:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 10:43:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 10:46:24 --> Severity: Notice  --> Undefined variable: data /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 10:46:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 10:46:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:46:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:46:43 --> Severity: Notice  --> Undefined variable: data /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 10:46:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 10:46:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 10:51:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:51:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 10:53:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 10:53:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 10:54:19 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 10:54:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 17
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 74
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 9
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 10
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 12
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 13
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 15
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 16
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 24
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 25
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 27
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 28
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 30
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 31
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 36
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 37
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 40
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 41
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 44
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 45
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 56
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 57
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2072
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 12:58:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 12:58:43 --> Severity: Notice  --> Undefined variable: data /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 12:58:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 12:58:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 12:59:06 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 12:59:06 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 12:59:06 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 12:59:06 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 12:59:06 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 12:59:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 13:06:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 17
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 74
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 9
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 10
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 12
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 13
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 15
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 16
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 24
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 25
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 27
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 28
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 30
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 31
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 36
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 37
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 40
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 41
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 44
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 45
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 56
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 57
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2072
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 16:33:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 16:35:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 16:36:01 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-16 16:36:01 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-16 16:36:01 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-16 16:38:04 --> Severity: Notice  --> Undefined variable: data /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 16:38:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 16:38:45 --> Severity: Notice  --> Undefined variable: data /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 16:38:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 16:44:18 --> Severity: Notice  --> Undefined variable: data /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 16:44:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 18:02:37 --> Severity: Notice  --> Undefined variable: data /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 18:02:37 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2981
ERROR - 2020-02-16 19:00:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:00:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:00:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:00:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:00:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:00:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:00:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 19:02:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 19:02:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:02:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:02:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:02:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:02:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 19:02:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:02:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:03:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:25 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-16 19:03:25 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-16 19:03:25 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-16 19:03:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:03:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:15 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-16 19:04:15 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 19:04:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 19:04:25 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-16 19:04:25 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 19:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 19:04:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:35 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-16 19:04:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:04:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-16 19:05:53 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2698
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 19:06:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 19:06:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:06:57 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 19:06:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 19:09:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:09:34 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 19:09:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 19:09:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:09:58 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 19:10:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 19:10:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:12:58 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-16 19:12:58 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 19:12:58 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-16 19:13:08 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-16 19:13:08 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 19:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 19:13:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 19:13:53 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 19:13:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 17
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 74
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 9
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 10
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 12
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 13
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 15
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 16
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 24
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 25
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 27
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 28
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 30
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 31
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 36
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 37
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 40
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 41
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 44
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 45
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 56
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 57
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 71
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 36
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 79
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 95
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 103
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2072
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2680
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 20:34:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 20:34:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-16 20:34:42 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 20:34:42 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 20:34:42 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 20:34:42 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 20:34:42 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-16 20:34:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-16 20:34:55 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-16 20:34:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
