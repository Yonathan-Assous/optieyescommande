<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-02-18 10:57:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 10:58:13 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 10:58:13 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 10:58:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:09:07 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-18 11:09:07 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 11:09:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 11:26:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 11:27:04 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 11:27:04 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:27:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:27:34 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-18 11:27:34 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 11:27:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 11:36:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 11:36:58 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 11:36:58 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:36:58 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:52:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 11:53:35 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 11:53:35 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:53:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:54:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 11:54:43 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 11:54:43 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:54:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 11:55:28 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 11:55:28 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:55:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 11:57:15 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 11:57:15 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:57:15 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 11:59:16 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 83
ERROR - 2020-02-18 11:59:16 --> Severity: Notice  --> Undefined index: axe /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/certificat_authenticite.php 111
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 11:59:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 12:05:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 12:06:19 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 12:06:19 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 12:06:19 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 12:06:54 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 12:13:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 12:13:35 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 12:13:35 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 12:13:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 12:13:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 17:50:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:47 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-18 17:50:47 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-18 17:50:47 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-18 17:50:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:50:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:51:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 17:52:08 --> Severity: Warning  --> is_dir(): open_basedir restriction in effect. File(/var/www/vhosts/optieyescommande.com/httpdocs/uploads/) is not within the allowed path(s): (/var/www/vhosts/ns398422.ip-176-31-125.eu/:/tmp/) /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/system/libraries/Upload.php 713
ERROR - 2020-02-18 17:52:08 --> The upload path does not appear to be valid.
ERROR - 2020-02-18 17:52:20 --> Severity: Warning  --> is_dir(): open_basedir restriction in effect. File(/var/www/vhosts/optieyescommande.com/httpdocs/uploads/) is not within the allowed path(s): (/var/www/vhosts/ns398422.ip-176-31-125.eu/:/tmp/) /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/system/libraries/Upload.php 713
ERROR - 2020-02-18 17:52:20 --> The upload path does not appear to be valid.
ERROR - 2020-02-18 17:52:32 --> Severity: Warning  --> is_dir(): open_basedir restriction in effect. File(/var/www/vhosts/optieyescommande.com/httpdocs/uploads/) is not within the allowed path(s): (/var/www/vhosts/ns398422.ip-176-31-125.eu/:/tmp/) /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/system/libraries/Upload.php 713
ERROR - 2020-02-18 17:52:32 --> The upload path does not appear to be valid.
ERROR - 2020-02-18 17:52:44 --> Severity: Warning  --> is_dir(): open_basedir restriction in effect. File(/var/www/vhosts/optieyescommande.com/httpdocs/uploads/) is not within the allowed path(s): (/var/www/vhosts/ns398422.ip-176-31-125.eu/:/tmp/) /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/system/libraries/Upload.php 713
ERROR - 2020-02-18 17:52:44 --> The upload path does not appear to be valid.
ERROR - 2020-02-18 17:52:55 --> Severity: Warning  --> is_dir(): open_basedir restriction in effect. File(/var/www/vhosts/optieyescommande.com/httpdocs/uploads/) is not within the allowed path(s): (/var/www/vhosts/ns398422.ip-176-31-125.eu/:/tmp/) /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/system/libraries/Upload.php 713
ERROR - 2020-02-18 17:52:55 --> The upload path does not appear to be valid.
ERROR - 2020-02-18 17:53:28 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2698
ERROR - 2020-02-18 17:54:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 17:54:25 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 17:54:25 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 17:54:25 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 17:54:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 17:54:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 17:55:15 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 17:55:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 17:55:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 17:55:42 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 17:55:42 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 17:55:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 17:56:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 17:56:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 17:57:22 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 17:57:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 17:57:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 17:58:08 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 17:58:08 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 17:58:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 17:58:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 17:58:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 18:00:21 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 18:00:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 18:01:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 18:02:48 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 18:02:48 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 18:02:48 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 18:02:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 18:03:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 18:03:15 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 18:03:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 18:03:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 18:03:45 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 18:03:45 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 18:03:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 18:04:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 18:04:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 18:04:21 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 18:04:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 18:04:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 18:04:51 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 18:04:51 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 18:04:51 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 18:17:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 18:17:49 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-18 18:17:49 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-18 18:17:49 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-18 19:38:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-18 00:00:00" AND date_commande < "2020-02-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-18 19:38:04 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-18 19:38:04 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-18 19:38:04 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-18 20:18:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 20:19:14 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 20:19:14 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 20:19:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 20:19:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 20:20:25 --> Query error: Duplicate entry '366764-droit' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (366764, 'droit',57,'2020-02-18')
ERROR - 2020-02-18 20:20:25 --> Query error: Duplicate entry '366764-gauche' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (366764, 'gauche',57,'2020-02-18')
ERROR - 2020-02-18 21:20:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 21:20:27 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 21:20:27 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 21:20:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 21:20:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:27:22 --> Severity: Notice  --> Undefined property: stdClass::$id_type_generation_verre /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 2954
ERROR - 2020-02-18 21:29:07 --> Query error: Duplicate entry '366766-droit' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (366766, 'droit',61,'2020-02-18')
ERROR - 2020-02-18 21:29:07 --> Query error: Duplicate entry '366766-gauche' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (366766, 'gauche',61,'2020-02-18')
ERROR - 2020-02-18 21:31:29 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:31:29 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:31:29 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:31:29 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:31:29 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:31:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 21:32:06 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 21:32:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 21:48:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 21:48:52 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 21:48:52 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 21:48:52 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 21:50:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 21:50:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:50:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:50:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:50:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:50:32 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-18 21:50:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 21:52:12 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 21:52:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 22:11:18 --> Query error: Duplicate entry '366769-droit' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (366769, 'droit',67,'2020-02-18')
ERROR - 2020-02-18 22:11:18 --> Query error: Duplicate entry '366769-gauche' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (366769, 'gauche',67,'2020-02-18')
ERROR - 2020-02-18 22:13:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-18 22:13:54 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-18 22:13:54 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 22:13:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-18 22:14:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-18 22:14:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:19:12 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:20:09 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:21:14 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 64
ERROR - 2020-02-18 23:26:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, string given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/commande_journaliere.php 101
