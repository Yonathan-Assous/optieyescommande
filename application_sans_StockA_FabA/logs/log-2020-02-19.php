<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-02-19 07:22:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 07:22:23 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-19 07:22:23 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 07:22:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 07:22:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 07:22:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 07:22:51 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 07:24:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 07:24:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 07:25:11 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-19 07:25:11 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 07:25:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 07:25:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 07:25:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 07:25:37 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 07:25:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 07:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:16 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-19 07:31:16 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-19 07:31:16 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-19 07:31:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:32:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 07:50:42 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 07:50:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 07:50:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 21:25:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 21:25:35 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-19 21:25:35 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-19 21:25:35 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-19 21:41:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 21:41:37 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-19 21:41:37 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 21:41:37 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 21:42:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 21:51:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 21:52:17 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-19 21:52:17 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 21:52:17 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 21:52:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 22:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 22:16:22 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-19 22:16:22 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 22:16:22 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 22:16:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 22:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 22:17:32 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 22:17:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 22:17:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 22:17:59 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 22:18:02 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 22:18:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-19 22:18:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-19 22:18:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-19 22:18:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-19 22:18:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_type_verre.php 5
ERROR - 2020-02-19 22:18:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 22:18:25 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 22:18:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 22:33:24 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 22:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 22:33:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 22:36:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 22:40:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 22:41:03 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 22:41:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 22:41:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 22:41:18 --> Query error: Unknown column 'jquery.min.map' in 'where clause' - SELECT * FROM users WHERE id_users=jquery.min.map
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1006
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1070
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1381
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1661
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1677
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1772
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2159
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2184
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2220
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2279
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2314
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2362
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2409
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2528
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2566
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2595
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2659
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2698
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2705
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3099
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3118
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3199
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3206
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3282
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3418
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3521
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3666
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3783
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4070
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4264
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4311
ERROR - 2020-02-19 22:41:18 --> Query error: Unknown column 'toastr.js.map' in 'where clause' - SELECT * FROM users WHERE id_users=toastr.js.map
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1006
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1070
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1381
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1661
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1677
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1772
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2159
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2184
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2220
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2279
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2314
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2362
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2409
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2528
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2566
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2595
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2659
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2698
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2705
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3099
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3118
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3199
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3206
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3282
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3418
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3521
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3666
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3783
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4070
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4264
ERROR - 2020-02-19 22:41:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4311
ERROR - 2020-02-19 22:41:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 22:41:42 --> Severity: Notice  --> Undefined index: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 800
ERROR - 2020-02-19 22:41:42 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 22:41:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 805
ERROR - 2020-02-19 22:41:57 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1706
ERROR - 2020-02-19 22:41:57 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1706
ERROR - 2020-02-19 22:41:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 22:41:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 22:42:44 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-19 22:45:21 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1006
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1070
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1381
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1661
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1677
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2184
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2362
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2409
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2475
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2475
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2475
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2475
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3099
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3282
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3418
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3521
ERROR - 2020-02-19 22:45:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3783
ERROR - 2020-02-19 22:45:33 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 5707
ERROR - 2020-02-19 22:45:34 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 22:45:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 22:45:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 22:46:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:46:51 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-19 22:46:51 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-19 22:46:51 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-19 22:46:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-01 00:00:00" AND date_commande < "2020-02-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-02 00:00:00" AND date_commande < "2020-02-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-03 00:00:00" AND date_commande < "2020-02-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-04 00:00:00" AND date_commande < "2020-02-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-05 00:00:00" AND date_commande < "2020-02-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-06 00:00:00" AND date_commande < "2020-02-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-07 00:00:00" AND date_commande < "2020-02-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-09 00:00:00" AND date_commande < "2020-02-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-10 00:00:00" AND date_commande < "2020-02-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-11 00:00:00" AND date_commande < "2020-02-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-13 00:00:00" AND date_commande < "2020-02-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-14 00:00:00" AND date_commande < "2020-02-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-15 00:00:00" AND date_commande < "2020-02-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-16 00:00:00" AND date_commande < "2020-02-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:47:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-17 00:00:00" AND date_commande < "2020-02-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-20 00:00:00" AND date_commande < "2020-02-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-21 00:00:00" AND date_commande < "2020-02-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-22 00:00:00" AND date_commande < "2020-02-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-23 00:00:00" AND date_commande < "2020-02-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-24 00:00:00" AND date_commande < "2020-02-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-25 00:00:00" AND date_commande < "2020-02-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-26 00:00:00" AND date_commande < "2020-02-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-27 00:00:00" AND date_commande < "2020-02-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-28 00:00:00" AND date_commande < "2020-02-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:48:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 22:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 22:48:37 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 22:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 22:48:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 22:49:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 22:50:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 22:50:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 22:50:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 22:50:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 22:50:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 22:51:49 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 22:51:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 22:51:58 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1706
ERROR - 2020-02-19 22:51:58 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1706
ERROR - 2020-02-19 22:51:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2020-02-19 22:52:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 22:54:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 22:54:44 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-19 22:54:44 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-19 22:54:44 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-19 22:55:27 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 22:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 22:55:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:01:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
ERROR - 2020-02-19 23:01:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:01:56 --> Query error: Unknown column 'toastr.js.map' in 'where clause' - SELECT * FROM users WHERE id_users=toastr.js.map
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1006
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1070
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1381
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1661
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1677
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1772
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2159
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2184
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2220
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2279
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2314
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2362
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2409
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2528
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2566
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2595
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2659
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2698
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2705
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3099
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3118
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3199
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3206
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3282
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3418
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3521
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3666
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3783
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4070
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4264
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4311
ERROR - 2020-02-19 23:01:56 --> Query error: Unknown column 'jquery.min.map' in 'where clause' - SELECT * FROM users WHERE id_users=jquery.min.map
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1006
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1070
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1381
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1661
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1666
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1677
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1772
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2159
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2184
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2220
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2279
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2314
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2362
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2409
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2528
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2566
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2595
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2659
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2698
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2705
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3099
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3118
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3199
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3206
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3282
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3418
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3521
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3666
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3783
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4070
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4264
ERROR - 2020-02-19 23:01:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4311
ERROR - 2020-02-19 23:02:05 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1706
ERROR - 2020-02-19 23:02:05 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1706
ERROR - 2020-02-19 23:02:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2020-02-19 23:02:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 23:02:56 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-19 23:02:56 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-19 23:02:56 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-19 23:03:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7551
ERROR - 2020-02-19 23:03:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - DELETE FROM commande_montures_temp WHERE id_client =  
ERROR - 2020-02-19 23:10:55 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1706
ERROR - 2020-02-19 23:10:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1706
ERROR - 2020-02-19 23:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2020-02-19 23:11:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 23:11:53 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-19 23:11:53 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-19 23:11:53 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-19 23:12:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:17:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:18:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:32:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:33:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 23:33:25 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-19 23:33:25 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-19 23:33:25 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-19 23:33:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:34:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:36:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:38:11 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 5140
ERROR - 2020-02-19 23:38:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 5140
ERROR - 2020-02-19 23:38:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2020-02-19 23:38:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:38:35 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 5140
ERROR - 2020-02-19 23:38:35 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 5140
ERROR - 2020-02-19 23:38:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 220
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 287
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 292
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 895
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 896
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 901
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 912
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1057
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1077
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1105
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1109
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1171
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1179
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1252
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1564
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1606
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1851
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1852
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1857
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1868
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2016
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2382
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2560
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2614
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3326
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3510
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3650
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 3754
ERROR - 2020-02-19 23:39:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 4178
ERROR - 2020-02-19 23:39:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:40:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:41:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:44:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:44:26 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 5140
ERROR - 2020-02-19 23:44:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 5140
ERROR - 2020-02-19 23:44:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
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
ERROR - 2020-02-19 23:44:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:45:04 --> Query error: Unknown column 'toastr.js.map' in 'where clause' - SELECT * FROM users WHERE id_users=toastr.js.map
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1380
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1659
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1665
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1676
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1768
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2158
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2183
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2219
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2278
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2313
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2361
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2408
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2527
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2565
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2594
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2658
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2697
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3098
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3117
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3198
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3281
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3417
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3520
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3665
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3782
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4069
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4263
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4310
ERROR - 2020-02-19 23:45:04 --> Query error: Unknown column 'jquery.min.map' in 'where clause' - SELECT * FROM users WHERE id_users=jquery.min.map
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 5
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 15
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 17
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 30
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 59
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 127
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 132
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 724
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 725
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 741
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 833
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 834
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 835
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 836
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 885
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 904
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 931
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 935
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 998
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1380
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1659
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1660
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1665
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1676
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1768
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1769
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1770
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 1771
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2158
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2183
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2219
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2278
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2313
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2361
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2408
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2527
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2565
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2594
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2658
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2697
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 2704
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3098
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3117
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3198
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3205
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3281
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3417
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3520
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3665
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 3782
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4069
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4263
ERROR - 2020-02-19 23:45:04 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/passer_commande_new.php 4310
ERROR - 2020-02-19 23:45:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-19 00:00:00" AND date_commande < "2020-02-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-19 23:45:42 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-19 23:45:42 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-19 23:45:42 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-02-19 23:45:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:46:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:47:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =1
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
ERROR - 2020-02-19 23:49:50 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 5140
ERROR - 2020-02-19 23:49:50 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 5140
ERROR - 2020-02-19 23:49:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =
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
